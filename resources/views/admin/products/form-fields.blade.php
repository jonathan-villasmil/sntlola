<div class="space-y-4">
    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Name
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="name" id="" value="{{old('name',$product->name)}}">
        
        @error('name')
           <small  class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
        <select name="category_id">
            <option  selected>Seleccione una categoria</option>
        @foreach ($category as $item)
            <option value="{{$item->id}}" >{{$item->name}}</option>
        @endforeach
      </select>
    
    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Description<br>
        <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="description" id="" cols="30" rows="4">{{old('description', $product->description)}}</textarea>
    </label>
    
    <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Imagen<br>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400 mb-4" type="file" name="image" id="">
    </label>
</div>