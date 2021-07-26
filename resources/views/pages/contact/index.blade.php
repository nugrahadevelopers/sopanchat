<x-app-layout>
    <div>
        <div class="p-4 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row md:mx-24 mt-14">
                    <div class="md:mr-4 mb-6">
                        <h4 class="text-3xl md:text-5xl text-center font-bold mb-6">
                            Contact Me
                        </h4>
                        <p class="text-lg mb-6 text-justify">
                            I’m interested in freelance, especially ambitious or large
                            projects. However, if you have other request or question, don’t
                            hesitate to use the form.
                        </p>
                        <form>
                            <div class="flex flex-col md:flex-row mb-6">
                                <div class="md:w-1/2 md:pr-4 mb-6">
                                    <label for="name"
                                        class="block mb-2 text-sm font-semibold text-gray-600 dark:text-gray-400">
                                        Name
                                    </label>
                                    <input type="name" name="name" id="name" placeholder="Name" required
                                        class="w-full px-3 py-2 placeholder-gray-300 border-b-2 focus:border-gray-700 transition-colors ease-in-out duration-200 focus:outline-none" />
                                </div>
                                <div class="md:w-1/2">
                                    <label for="email"
                                        class="block mb-2 text-sm font-semibold text-gray-600 dark:text-gray-400">
                                        Email Address
                                    </label>
                                    <input type="email" name="email" id="email" placeholder="Email" required
                                        class="w-full px-3 py-2 placeholder-gray-300 border-b-2 focus:border-gray-700 transition-colors ease-in-out duration-200 focus:outline-none" />
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="message"
                                    class="block mb-2 text-sm font-semibold text-gray-600 dark:text-gray-400">
                                    Your Message
                                </label>

                                <textarea rows="2" name="message" id="message" placeholder="Message"
                                    class="w-full px-3 py-2 placeholder-gray-300 border-2 focus:border-gray-900 transition-colors ease-in-out duration-200 focus:outline-none"
                                    required></textarea>
                            </div>
                            <div class="mb-6">
                                <button
                                    class="border-2 border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-gray-100 transition ease-in-out duration-200 text-lg font-bold py-2 px-4 focus:outline-none">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>