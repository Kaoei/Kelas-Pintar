<!-- <a href="{{route('createChat')}}">Create Forum</a>
@foreach($result as $d)
<h1><a href="{{route('detailChat', $d->id_chat)}}">{{$d->forum}}</a></h1>
<h3>{{$d->user}}</h3>
<h3>{{$d->created_at}}</h3>
@endforeach -->
<div class="content h-screen w-10/12 bg-gray-200 grid grid-rows-12">
    <div class="row-span-1 flex justify-end">
        <img src="" alt="profile">
    </div>
    
    <div class="row-span-4 grid grid-cols-3 justify-center items-center">
        @for($i = 0; $i < 3; $i++)
        <div class="bg-white p-2 w-3/4 h-3/4 mx-6 rounded-md">
            <div class="h-2/5 flex items-center">
                <img src="" alt="profile picture">
                <h1 class="mx-4 font-roboto">Nama User</h1>
            </div>

            <div class="h-3/5 p-2">
                <h1 class="text-sm font-poppins">
                Eskul basket open member nich.
                </h1>
            </div>
        </div>
        @endfor
    </div>
    <div class="row-span-7 border-t-2 border-black px-6 py-4">
        <div class="w-full h-1/6">
            <div class="bg-white h-full w-full rounded-md flex p-2">
                <img class="w-1/12" src="" alt="pp">
                <input class="w-10/12 h-full border border-black rounded-md" type="text" placeholder="   Tulis Pesanmu...">
                <button class="w-1/12">Yes</button>
            </div>
        </div>

        <div class="w-full h-5/6">
            <div class="w-full h-64 bg-white px-4 pt-4 mt-4 rounded-md grid grid-rows-5">
                <div class="row-span-3">
                    <div class="h-1/3 w-full flex">
                        <img class="mx-2" src="" alt="pp">
                        <h1 class="mx-2">Nama User</h1>
                        <h1 class="mx-2 text-gray-500 text-sm">1hr ago</h1>
                    </div>

                    <div class="h-2/3 w-full py-2 px-6">
                        <h1 class="text-sm">
                        "Lorem ipsum dolor sit amet,sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </h1>
                    </div>
                </div>
                <div class="row-span-2 py-4 border-t-2 border-black">
                    <div class="grid grid-cols-10">
                        <img class="col-span-1" src="" alt="pp">
                        <div class="col-span-9 border border-black rounded-md flex">
                            <input class="h-full w-11/12" type="text" placeholder="  Tulis komentar..." style="background: none;">
                            <button class="h-full w-1/12">su</button>
                        </div>
                    </div>

                    <h1 class="flex justify-center my-2"><a href="">Tampilkan semua balasan</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>



</div>