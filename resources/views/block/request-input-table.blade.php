<x-enlighten-headline>Request Input</x-enlighten-headline>
<table class="bg-gray-800 p-4 rounded-lg overflow-hidden text-gray-100 mb-4 w-full mt-4">
    <thead>
    <tr class="bg-gray-500">
        <th class="py-2 text-sm text-left text-gray-800 px-4 text-sm font-normal">Name</th>
        <th class="py-2 text-sm text-left text-gray-800 px-4 text-sm font-normal">Value</th>
    </tr>
    </thead>
    <tbody>
    @foreach($codeExample->request_input as $name => $value)
        <tr>
            <td class="py-2 px-4 font-thin text-gray-200">{{ $name }}</td>
            <td class="py-2 px-4 font-thin text-teal-300 break-all">{{ $value }}</td>
        </tr>
    @endforeach
    </tbody>
</table>