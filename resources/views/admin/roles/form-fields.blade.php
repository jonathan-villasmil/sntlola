<div class="space-y-4">
    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Name
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="name" id="" value="{{old('name', $role->name)}}">
        

        {{-- value="{{old('name',$product->name)}}"
            {{old('description', $product->description)}}
        --}}
        @error('name')
           <small  class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

        {{-- <select name="category_id">
            <option  selected>Seleccione una categoria</option>
                @foreach ($category as $item)
            <option value="{{$item->id}}" >{{$item->name}}</option>
                @endforeach
        </select> --}}
    
    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Description<br>
        <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="description" id="" cols="30" rows="4">{{old('description', $role->description)}}</textarea>
    </label>
    
    {{-- <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Imagen<br>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400 mb-4" type="file" name="image" id="">
    </label> --}}
    <div class="flex justify-around">
        <h2 class="font-serif text-slate-600 dark:text-slate-400 mr-2">Full-Access</h2>
        <div class="form-check form-check-inline mr-2">
          <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 fous:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="radio" name="full-access" id="fullaccessyes" value="yes"
          @if($role['full-access'] == "yes")
            checked
          @elseif(old('full-access')== "yes")
            checked 
          @endif
          >
          <label class="form-check-label inline-block font-serif text-slate-600 dark:text-slate-400 mr-2" for="fullaccessyes">yes</label>
        </div>
        <div class="form-check form-check-inline mr-2">
          <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" type="radio" name="full-access" id="fullaccessno" value="no"
          @if($role['full-access'] == "no")
            checked
          @elseif(old('full-access')== "no")
            checked 
          @endif
          >
          <label class="form-check-label inline-block font-serif text-slate-600 dark:text-slate-400 " for="fullaccessno">no</label>
        </div>
        
      </div>

      <h2 class="font-serif text-slate-600 dark:text-slate-400 mr-2">Permission List</h2>
      
      <div class="grid justify-items-start">
        @foreach($permissions as $permission)
        <div class="form-check mr-2">
            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="checkbox" name="permission[]" id="permission_{{$permission->id}}" value="{{$permission->id}}"
            
            @if(is_array(old('permission')) && in_array("$permission->id", old('permission')) )
              checked

            @elseif(is_array($permission->role) && in_array("$permission->id", $permission->role) )
              checked
            @endif

            >
            <label class="form-check-label inline-block font-serif text-slate-600 dark:text-slate-400 " for="">{{$permission->name}} - {{$permission->description}}</label>
          </div>
        @endforeach
      </div>
</div>

