<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List (Laravel + MySQL)</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-5">
  <main class="p-5 m-5 max-w-[1000px] border rounded-md shadow-md mx-auto">
    <h1 class="p-3 font-black text-center text-xl">
      📃 ToDo List
      <br/>
      <small class="text-center w-full font-medium text-xs">
        Powered by Laravel + MySQL
      </small>
    </h1>
    <hr>

    <form class="px-3 mt-5 text-end" 
          action="{{ route('addtodo') }}" 
          method="POST">
    @csrf
      <input type="text" 
              required
              name="content" 
              class="border border-2 rounded indent-2 w-full py-2 placeholder:italic mb-2" 
              placeholder="Write your todo here ..." />

      <button class="border border-sky-600 text-sky-600 px-3 py-1 rounded font-bold hover:shadow-md mt-2
                    w-36"
              type="submit">
        + Add
      </button>
    </form>

    @if(session('success'))
    <div class="text-center bg-green-300 rounded m-3 py-2 text-sm text-green-800">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="px-10 py-3">
        <ul class="list-disc">
            @foreach($todos as $todo)
              <li class="text-sm text-gray-600">{{ $todo->content }}</li>
            @endforeach
      </ul>
    </div>

  </main>
</body>

</html>