<div>
    <h3 class="text-center">Add New Task</h3>

{{--    @if(session()->has('message'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{session('message')}}--}}
{{--        </div>--}}
{{--    @endif--}}

    <div class="form-group">
        @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror
        <label for="title">Title</label>
        <input type="text" wire:model.debounce.600ms="title" class="form-control">
    </div>

    <div class="form-group">
        <button wire:click.prevent="addTask" class="btn btn-primary btn-block">Add</button>
    </div>
    </form>
    {{$title}}
</div>
