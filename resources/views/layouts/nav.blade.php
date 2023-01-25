<nav class="mt-5">
    <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>  
          <li><a class="dropdown-item" href="{{ route('admin.category.index') }}">Kategori</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.post.index') }}">Post</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.unggulan.index') }}">Agenda</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.slider.index') }}">Slider</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.unggulan.index')}}">Keunggulan</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.testimony.index')}}">Testimoni</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.facility.index')}}">Fasilitas</a></li>
          <li><a class="dropdown-item" href="{{route('admin.story.index')}}">Story</a></li>
          <li><a class="dropdown-item" href="{{route('admin.inisiatif.index')}}">Inisiatif</a></li>

        </ul>
        <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>

                    <span class="mx-3">Member dan Kontak</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('admin.daftarform.index') }}">Member</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.daftarform.index') }}">Kontak</li>
        </ul>
        <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>

                    <span class="mx-3">Setting Profile</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('admin.profile.index')}}">Profil Saya</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.identity.index') }}">Profil Perusahaan</li>
            <li><a class="dropdown-item" href="{{ route('admin.logo.index') }}">Logo Perusahaan</li>    
        </ul>                
                <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
        
                            <span class="mx-3">About As</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('admin.about.index') }}">About As</a></li>  
                  <li><a class="dropdown-item" href="{{ route('admin.visi.index')}}">Visi</a></li>
                  <li><a class="dropdown-item" href="{{ route('admin.misi.index') }}">Misi</a></li>
                  <li><a class="dropdown-item" href="{{ route('admin.motto.index') }}">Moto</a></li>
                </ul>  

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100" href="{{route('admin.svg.index')}}" role="button"  data-bs-toggle="nav-link" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
        
                            <span class="mx-3">Svg</span>
                </a>
                <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100" href="{{route('admin.program.index')}}" role="button"  data-bs-toggle="nav-link" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
        
                            <span class="mx-3">Program</span>
                </a>
   </nav>