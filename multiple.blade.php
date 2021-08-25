
<div>

    <section class="container">
        <div class="form-group" wire:ignore>

            <label for="product-dropdown">Product</label>

            <select id="product-dropdown" class="custom-select" multiple>
                @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>

        </div>

        <button class="btn btn-info" wire:click.prevent="onClick">Show Result</button>
    </section>

</div>

<script>
    $(document).ready(function() {

        $('#product-dropdown').select2({
            placeholder: 'Select Product',
            theme: 'bootstrap4'
        });

        $('#product-dropdown').on('change', function(e) {

            // console.log($(this).val());
            
            let data = $(this).val();

            @this.set('productList', data);

        });
    });
</script>