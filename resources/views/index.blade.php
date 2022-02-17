<h1>
    hello world
</h1>
{{--  <!-- <?php for ($i = 0; $i < 11; $i++) { ?>

    <th><?php echo $i; ?></th>

<?php } ?> --> 

@for ($i = 0; $i <= 10; $i++)
    <h1>massage </h1>
    {{ $i }}
@endfor

@include('welcome') --}}
{{-- {{ $data }} --}}

@foreach($data as  $value)
    {{ $value->course_name }}
    <br>
@endforeach