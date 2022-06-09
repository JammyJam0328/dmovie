<div x-data="notification"
    x-on:notify.window="pushNewNotification(event.detail)">
    <div aria-live="assertive"
        class="fixed inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
        <div class="flex flex-col items-center w-full space-y-4 sm:items-end">
            <template x-for="notif of notifications"
                x-bind:key="notif.id">
                <div x-show="visibles.includes(notif)"
                    x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 translate-x-2"
                    x-transition:enter-end="transform  opacity-100"
                    x-transition:leave="transition ease-out duration-500"
                    x-transition:leave-start="transform translate-x-0 opacity-100"
                    x-transition:leave-end="transform translate-x-full opacity-0"
                    x-bind:class="{
                        'bg-green-50': notif.type === 'success',
                        'bg-red-50': notif.type ===
                            'error',
                        'bg-yellow-50': notif.type === 'warning'
                    }"
                    class="w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-lg pointer-events-auto ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <template x-if="notif.type=='success'">
                                    <svg class="w-6 h-6 text-green-400"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </template>
                                <template x-if="notif.type=='error'">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-red-500"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="notif.type=='info'">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-blue-600"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="notif.type=='warning'">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-yellow-500"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="notif.type=='thumbs-up'">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-emerald-600"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                </template>
                                <template x-if="notif.type=='thumbs-down'">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 text-indigo-600"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.105-1.79l-.05-.025A4 4 0 0011.055 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z" />
                                    </svg>
                                </template>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-gray-900"
                                    x-text="notif.title"></p>
                                <p class="mt-1 text-sm text-gray-500"
                                    x-text="notif.message"></p>
                            </div>
                            <div class="flex flex-shrink-0 ml-4">
                                <button x-on:click="remove(notify.id)"
                                    type="button"
                                    class="inline-flex text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-0 ">
                                    <span class="sr-only">Close</span>
                                    <!-- Heroicon name: solid/x -->
                                    <svg class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('notification', () => ({
                notifications: [],
                visibles: [],
                pushNewNotification(notification) {
                    const defaultType = 'success';
                    notification.type ?? defaultType;
                    notification.id = Date.now();
                    this.notifications.push(notification);
                    this.toast(notification.id);
                },
                toast(id) {
                    this.visibles.push(this.notifications.find(notice => notice.id == id));
                    setTimeout(() => {
                        this.removeFromVisibles(id);
                        // this.removeFromNotifications(id);
                    }, 3000)
                },
                removeFromVisibles(id) {
                    const notice = this.visibles.find(notice => notice.id == id)
                    const index = this.visibles.indexOf(notice)
                    this.visibles.splice(index, 1)
                },

                removeFromNotifications(id) {
                    const notice = this.notifications.find(notice => notice.id == id)
                    const index = this.notifications.indexOf(notice)
                    this.notifications.splice(index, 1)
                },
                // exists(id) {
                //     return this.notifications.find(notice => notice.id == id) ? true : false;
                // },
            }))
        })
    </script>
@endpush
