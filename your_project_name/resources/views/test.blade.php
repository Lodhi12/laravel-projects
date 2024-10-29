@php
    $user = "Ammar Lodhi";
    $fruits = ["Apple", "Orange", "Banana", "Grapes"];
@endphp

<script>
    var data1 = @json($user);

    var data2 = {{ Js::from($fruits) }}
    data.forEach(function(entry) {
        console.log(entry);
    });
    
</script>