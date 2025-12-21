<div class="">
    <label for="">Select a Category</label>
    <div class="">
        <select class="form-select category-dropdown"  onchange="changeCategory(this)">
            @foreach ($categories  as $Category )
            <option value="{{ $Category }}">{{ $Category }}</option>

            @endforeach
        </select>
    </div>
</div>
