<div x-data="{body:null}" class="bg-blue-500 text-white absolute top-0 right-0  m-3 rounded-lg" @alert.window="
    (e) => {
        body=e.detail.body;
        setTimeout(()=>body=null , 5000);
    }" x-show="body">
    <div class="flex flex-col">
        <button
            class=" text-3xl flex justify-end -translate-x-2 -translate-y-2 border-white bg-white text-black p-1 px-2 rounded-full w-fit"
            @click="body=''">x</button>
        <div x-text="body" class="p-3"></div>
    </div>
</div>