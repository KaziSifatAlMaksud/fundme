<div class="item position-relative">
  <a href="{{ url('category',$category->slug) }}">
    <img class="img-fluid rounded" src="{{asset('/img-category')}}/{{ $category->image == '' ? 'default.jpg' : $category->image }}" alt="{{ $category->name }}">
    <h5>{{ Lang::has('categories.' . $category->slug) ? __('categories.' . $category->slug) : $category->name }} <small>({{$category->campaigns_count}})</small></h5>
  </a>
</div>
