<div>
    <form action="">
        <label>Poll Title</label>

        <input type="text" wire:model.live="title">

        Current title: {{$title}}

        <div class="mb-4 mt-4">
          <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
              <div>
                <label>Option {{$index + 1}}</label>
              </div>

              <div class="flex gap-2 mb-4">
                <input type="text" wire:model.live="options.{{$index}}">
                <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
              </div>
            @endforeach
        </div>
    </form>
</div>