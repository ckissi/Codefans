<?php

use Livewire\Volt\Component;

new class extends Component {
    public $subscribed;

    public function mount()
    {
        $this->subscribed = Auth::user()->subscribed;
    }

    public function subscribe()
    {
        Auth::user()->subscribed = $this->subscribed ? 1 : 0;
        Auth::user()->save();
    }
};
?>

<div class="flex items-center space-x-3">
    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" value="" class="sr-only peer" name="switch" wire:model="subscribed"
            @if ($subscribed) checked @endif wire:click=subscribe()>
        <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-offset-2 ring-2 ring-offset-2 peer-focus:ring-gray-300 dark:peer-focus:ring-gray-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-gray-800">
        </div>
    </label>
    <div @class(['text-sm', 'text-gray-500' => !$subscribed])>Subscribe to emails</div>
</div>
