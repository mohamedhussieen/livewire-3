<div>
Hello ,{{$name}}
<div class="mt-2">
  <input
  id="newName"
  type="text" class="black w-full p-4 border rounded-md bg-gray-700 text-black">

    <button
    class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
    wire:click="changeName(document.queurySelector('#newName').value)"
    >
        Greet
    </button>

</div>
</div>
