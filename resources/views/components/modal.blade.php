<!-- MODAL WRAPPER -->
<div id="modal-wrapper" class="hidden fixed z-10 inset-0">
    <div class="flex items-center justify-center min-h-screen bg-gray-500 bg-opacity-75 transition-all">

        <!-- BOX -->
         
        <div {{$attributes->merge(['class'=>'flex flex-col drop-shadow-lg items-center justify-evenly space-y-2 bg-white p-4 rounded'])}}>
        <div class="flex self-end">
            <button id="close-btn" class="flex-1 self-end w-6 h-6">
                <x-modal-close-btn class=""></x-modal-close-btn>
            </button>
         </div>
            {{$slot}}
        </div>
    </div>
</div>