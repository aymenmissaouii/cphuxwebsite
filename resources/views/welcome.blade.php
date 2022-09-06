<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <script src="https://cdn.tailwindcss.com"></script>

          @livewireStyles

          @include('components.header')

    </head>
    <body>

        <div class="mb-5">
            <livewire:salary-survey />
        </div>

          @include('components.footer')
          @livewireScripts
    </body>
</html>
