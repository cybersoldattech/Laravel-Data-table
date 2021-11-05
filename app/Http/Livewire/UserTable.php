<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public  $search = '';
    public $orderField= 'name';
    public  $orderDirection = 'ASC';
    protected $tableProperty = ['name', 'email', 'role'];
    public $editId = 0;

    protected  $queryString = [
        'search' => ['except'=>''],
    ];

    public function starEdit(int $Id)
    {
       $this->editId = $Id;
    }
    public function setOrderField(string $name)
    {

        if(in_array($name,$this->tableProperty)){
            if($name === $this->orderField){
                $this->orderDirection = $this->orderDirection === 'ASC' ? 'DESC' : 'ASC';
            }else{
                $this->reset(['orderDirection', 'orderField']);
            }
        }
    }


    public function render()
    {
        return view('livewire.user-table',[
            'users' => User::where('email', 'LIKE',  "%{$this->search}%")
                ->orWhere('name','LIKE', "%{$this->search}%")
                ->orWhere('role','LIKE', "%{$this->search}%")
                ->orderBy($this->orderField , $this->orderDirection)
                ->paginate(10),
        ]);
    }
}
