<div class="accordion accordion-program d-none d-sm-block" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed {{ (request()->is('preschool')) ? 'program-active' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Success Story
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse {{ (request()->is('preschool','preschool-life','preschool-calendar')) ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <li class="{{ (request()->is('preschool')) ? 'active' : '' }}"><a href="{{route('home')}}/success-story">Our Success Story</a> </li>
            <li class="{{ (request()->is('preschool-life')) ? 'active' : '' }}"><a href="{{route('home')}}/success-story">Our Client</a> </li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Initiatives
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse {{ (request()->is('primary-school','primary-school-life','primary-school-calendar','primary-school-curriculum')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <li class="{{ (request()->is('primary-school')) ? 'active' : '' }}"><a href="{{route('home')}}/initiative">Initiatives Program</a></li>
      </div>
    </div>
  </div>
</div>