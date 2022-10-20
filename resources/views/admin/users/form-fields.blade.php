<div class="space-y-4">
    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Name
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="name" id="" value="{{old('name',$users->name)}}">
        
        @error('name')
           <small  class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Email
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="email" name="email" id="" value="{{old('email',$users->email)}}">
        
        @error('email')
           <small  class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Password
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="password" name="password" id="" value="">
        
        @error('password')
           <small  class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Password confirmation
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400 mb-4" type="password" name="password_confirmation" id="" value="">
        
        @error('password_confirmation')
           <small  class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

    {{-- Role Id --}}
    {{-- <select name="role_id">
            <option selected>Seleccione un role</option>
        @foreach ($category as $item)
            <option value="{{$item->id}}" >{{$item->name}}</option>
        @endforeach
    </select> --}}
    
    {{-- <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Description<br>
        <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="description" id="" cols="30" rows="4">{{old('description', $product->description)}}</textarea>
    </label> --}}
    
    {{-- <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Imagen<br>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400 mb-4" type="file" name="image" id="">
    </label> --}}
</div>