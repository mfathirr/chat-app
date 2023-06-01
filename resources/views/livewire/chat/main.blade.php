<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>
</div>

<div class="chat_container">
    <div class="chat_list">
        @livewire('chat.chatlist')
    </div>
    <div class="chat_box">
        @livewire('chat.chatbox')
        @livewire('chat.send-message')
    </div>
</div>
