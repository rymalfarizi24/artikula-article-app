<div class="space-y-4 w-xl mt-4 mx-auto">
    <h2>Change Profile</h2>
    <form wire:submit.prevent="save">
        <label class="block mb-2.5 text-sm font-medium text-heading" for="image">Post Image</label>
        <input wire:model='image' name="image" id="image" type="file" accept="image/*"
            class="cursor-pointer mb-4 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-600 block w-full shadow-xs placeholder:text-body">
        <x-ui.submit-button target="save,image" class="col-span-full">Submit
            Post</x-ui.submit-button>
    </form>
</div>