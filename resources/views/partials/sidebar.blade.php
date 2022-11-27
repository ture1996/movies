<aside class="col-md-4 blog-sidebar">
          <div class="p-3">
            <h4 class="font-italic">Last updated</h4>
            <ol class="list-unstyled mb-0">
                    
                           @php 
                                $i = count($movies)-1;
                            @endphp
                           @while($i>count($movies)-6 && $i>-1)
                            <li><a href="{{route('single-movie' , ['id' => $movies[$i]->id])}}">{{$movies[$i]->title}}</a></li>
                           @php $i--; @endphp
                            @endwhile
                    
            </ol>
            
          </div>
        </aside>

