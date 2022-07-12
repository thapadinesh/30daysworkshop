<nav aria-label="Page navigation" style="background-color:yellow;">
  <ul class="pagination">
    <li class="page-item @if($paginator->previousPageUrl()==""){{"disabled"}}@endif">
      <a class="page-link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">2</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#" style="background-color:aqua;">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item @if($paginator->nextPageUrl()==""){{"disabled"}}@endif">
      <a class="page-link" href="{{$paginator->nextPageUrl()}}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
