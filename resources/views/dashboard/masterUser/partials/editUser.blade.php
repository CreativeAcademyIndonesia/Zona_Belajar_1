<label class="btn btn-warning" for="modalEdit">Edit</label>
<input class="modal-state" id="modalEdit" type="checkbox" />
<div class="modal">
	<label class="modal-overlay" for="modalEdit"></label>
	<div class="modal-content flex flex-col gap-5 p-3">
		<label for="modalEdit" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
		<h2 class="text-xl">Edit User</h2>
		<div class="p-4 shadow-lg">
            <form class="space-y-4" method="POST">
                <div class="w-full">
                    <label class="sr-only" for="name">Name</label>
                    <input class="input input-solid max-w-full" placeholder="Name" type="text" id="name" />
                </div>
    
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label class="sr-only" for="email">Email</label>
                        <input class="input input-solid" placeholder="Email address" type="email" id="email" />
                    </div>
    
                    <div>
                        <label class="sr-only" for="phone">Phone</label>
                        <input class="input input-solid" placeholder="Phone Number" type="tel" id="phone" />
                    </div>
                </div>
    
                <div class="w-full">
                    <label class="sr-only" for="message">Message</label>
                    <textarea class="textarea textarea-solid max-w-full" placeholder="Message" rows="8" id="message"></textarea>
                </div>
                
                <div class="flex gap-3">
                    <button class="btn btn-solid-warning btn-block">Cancel</button>
                    <button type="submit" class="btn-block btn btn-warning">Simpan</button>
                </div>
            </form>
        </div>
	</div>
</div>