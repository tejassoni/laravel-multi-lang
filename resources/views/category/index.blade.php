<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.category') }}
        </h2>
    </x-slot>
    @if (session()->get('success'))
        <div class="p-2 bg-indigo-200 border-b border-indigo-400 rounded-md">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('posts.create') }}"
                        class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">{{ __('messages.new') }}</a>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{ __('messages.name') }}</th>
                                <th>{{ __('messages.description') }}</th>
                                <th>{{ __('messages.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>Edinburgh</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('footer-scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                console.log('test 123')
                $('#example').DataTable();
            });
        </script>
    @endpush
</x-app-layout>
