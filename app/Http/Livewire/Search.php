<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Design;
use App\Models\Genre;
use App\Models\InkLevel;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $selectedInkLevel = 0;
    public $selectedColor = 0;
    public $selectedGenre = 0;
    public $searchTerm = "";
    public $sorting = null;

    public function mount()
    {

    }

    private function toggleSorting()
    {
        if ($this->sorting !== null) {
            if ($this->sorting[1] == 'desc') {
                $this->sorting[1] = 'asc';
            } else {
                $this->sorting[1] = 'desc';
            }
        }
    }

    public function sortByCriteria($criteria)
    {
        if ($this->sorting === null) {
            $this->sorting = [$criteria, 'asc'];
        } else {
            if ($this->sorting[0] == $criteria) {
                $this->toggleSorting();
            } else {
                $this->sorting = [$criteria, 'asc'];
            }
        }
    }

    public function sortByGenre()
    {
        $this->sortByCriteria('genre_id');
    }

    public function sortByInkLevel()
    {
        $this->sortByCriteria('ink_level_id');
    }

    public function sortByColor()
    {
        $this->sortByCriteria('color_id');
    }

    public function sortByPrice()
    {
        $this->sortByCriteria('price');
    }

    public function sortByName()
    {
        $this->sortByCriteria('name');
    }

    public function sortByDesignNumber()
    {
        $this->sortByCriteria('design_number');
    }


    public function render()
    {
        return view('livewire.search', [
            'designs' => Design::where('active', true)
                ->when($this->selectedInkLevel != 0, function ($query) {
                    $query->where('ink_level_id', $this->selectedInkLevel);
                })
                ->when($this->selectedColor != 0, function ($query) {
                    $query->where('color_id', $this->selectedColor);
                })
                ->when($this->selectedGenre != 0, function ($query) {
                    $query->where('genre_id', $this->selectedGenre);
                })
                ->when($this->searchTerm != "", function ($query) {
                    $query->where('name', 'like', '%' . $this->searchTerm . '%')->orWhere('design_number', 'like', '%' . $this->searchTerm . '%');
                })
                ->when($this->sorting !== null, function ($query) {
                    $query->orderby($this->sorting[0], $this->sorting[1]);
                })
                ->paginate(20),
            'allInkLevels' => InkLevel::all(),
            'allColors' => Color::all(),
            'allGenres' => Genre::all(),
        ]);
    }
}
