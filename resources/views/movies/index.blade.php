<h1>i nostri film</h1>


@foreach ($movies as $item)
<div class="my-row" >
  <ul>
    <li>{{$item["title"]}}</li>
    <li>{{$item["original_title"]}}</li>
    <li>{{$item["nationality"]}}</li>
    <li>{{$item["date"]}}</li>
    <li>{{$item["vote"]}}</li>
  </ul>
</div>

    
@endforeach

</div>
</div>