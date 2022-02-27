@props(['category'])

<a href="/posts/?category={{ $category->slug }}"
     class="px-2 py-1 border border-blue-300 text-xs text-blue-300 rounded-full uppercase font-semibold">
     {{ $category->name }}
 </a>
