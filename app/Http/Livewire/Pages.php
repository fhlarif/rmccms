<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Pages extends Component
{
    public $category;
    public $title;
    public $body;
    public $active=0;
    public $modalFormVisible =false;


    /**
     * Show modal
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }

    /**
     * Create the page
     *
     * @return void
     */
    public function createpage(Request $request)
    {
        //User::find($request);
        $this->validate();
        $user=Auth::user();
        //dd($this->title,$this->category,$this->body,$this->active);
        $page= new Page();
        $page->title=$this->title;
        $page->body=$this->body;
        $page->category=$this->category;
        $page->author_id=$user->id;
        ($this->active==="Yes" ? $page->active=1 :  $page->active=0);
        $page->slug = Str::slug($page->title);
        //dd($page);
        $page->save();
        $this->reset(['title', 'body','category','active']);
        $this->modalFormVisible=false;
        session()->flash('message', 'Post successfully updated.');
    }

    public function rules()
    {
        return [
            'title'=>'required|unique:pages',
            'category'=>'required',
            'body'=>'required',
            'active'=>'required',
    ];
    }

    public function render()
    {
        return view('livewire.pages');
    }
}
