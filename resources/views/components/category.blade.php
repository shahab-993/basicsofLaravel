<div class="">
    <label for="">Select a Category</label>
    <div class="">
        <select id="category-dropdown" class="form-select "  onchange="changeCategory(this)">
            @foreach ($categories  as $Category )
            <option value="{{ $Category }}">{{ $Category }}</option>

            @endforeach
        </select>
    </div>
</div>
