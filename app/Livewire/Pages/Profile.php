<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use App\Support\SupabaseStorage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $image;

    public function render()
    {
        return view('livewire.pages.profile');
    }

    public function save()
    {
        // $this->validate([
        //     'image' => 'required|image|max:2048',
        // ]);

        // $path = SupabaseStorage::disk('post-image')->putFile(3, $this->image);

        // Post::where('id', 3)->update(['image' => $path]);

        if (SupabaseStorage::disk('post-image')->exists('3/C81qscRWNaVLJNj6sUtFrU4nIU76pUEf9VlDwNdF.png')) {
            $response = SupabaseStorage::disk('post-image')->delete(
                '3/C81qscRWNaVLJNj6sUtFrU4nIU76pUEf9VlDwNdF.png'
            );
            $this->dispatch('toast', type: 'success', message: 'Profile image updated successfully!');
            return;
        }

        $this->dispatch('toast', type: 'danger', message: 'Failed to update profile image!');
    }
}
