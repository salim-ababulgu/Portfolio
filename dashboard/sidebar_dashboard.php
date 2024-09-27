

<aside class="fixed left-0 right-0 top-0 z-50 w-full border-r-2 border-r-muted transition-[width] md:bottom-0 md:right-auto md:h-svh md:w-64">
    <div class="absolute inset-0 transition-[opacity] delay-100 duration-700 h-0 opacity-0 w-full bg-black md:hidden"></div>
        <div data-layout="layout" class="h-full overflow-auto flex flex-col">
          <div data-layout="header" class="h-[var(--header-height)] items-center gap-4 bg-background p-4 flex-none sticky top-0 z-50 flex justify-between px-4 py-3 shadow-sm md:px-4">
            <div class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="transition-all h-8 w-8">
                <rect width="256" height="256" fill="none"></rect>
                <line x1="208" y1="128" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                <line x1="192" y1="40" x2="40" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                <span class="sr-only">
                  Website Name
                </span>
              </svg>
              <div class="flex flex-col justify-end truncate visible w-auto">
                <span class="font-medium">
                  Shadcn Admin
                </span>
                <span class="text-xs">
                  Vite + ShadcnUI
                </span>
              </div>
            </div>
            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9 md:hidden" aria-label="Toggle Navigation" aria-controls="sidebar-menu" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-menu-2 ">
                <path d="M4 6l16 0"></path>
                <path d="M4 12l16 0"></path>
                <path d="M4 18l16 0"></path>
              </svg>
            </button>
          </div>
          <div data-collapsed="false" class="group border-b bg-background transition-[max-height,padding] duration-500 data-[collapsed=true]:py-2 md:border-none z-40 h-full flex-1 overflow-auto max-h-0 
            py-0 md:max-h-screen md:py-2">
            <nav class="grid gap-1 group-[[data-collapsed=true]]:justify-center group-[[data-collapsed=true]]:px-2">
              <a class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none 
                disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/">
                <div class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="tabler-icon tabler-icon-layout-dashboard ">
                    <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                    <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"></path>
                    <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                    <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"></path>
                  </svg>
                </div>
                Dashboard
              </a>
              <a class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring 
                disabled:pointer-events-none disabled:opacity-50   bg-secondary text-secondary-foreground shadow-sm hover:bg-secondary/80 text-xs h-12 justify-start text-wrap rounded-none px-6" 
                href="/tasks" aria-current="page">
                <div class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="tabler-icon tabler-icon-checklist ">
                    <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
                    <path d="M14 19l2 2l4 -4"></path>
                    <path d="M9 8h4"></path>
                    <path d="M9 12h2"></path>
                  </svg>
                </div>
                  Tasks
                <div class="ml-2 rounded-lg bg-primary px-1 text-[0.625rem] text-primary-foreground">
                  3
                </div>
              </a>
              <a class="inline-flex items-center whitespace-nowrap font-medium 
                transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/chats">
                <div class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="tabler-icon tabler-icon-messages ">
                    <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
                    <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
                  </svg>
                </div>
                Chats
                <div class="ml-2 rounded-lg bg-primary px-1 text-[0.625rem] text-primary-foreground">9</div></a><a class="inline-flex items-center whitespace-nowrap font-medium 
                  transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/apps">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                        stroke-linejoin="round" class="tabler-icon tabler-icon-apps ">
                      <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                      <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                      <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                      <path d="M14 7l6 0"></path>
                      <path d="M17 4l0 6"></path>
                    </svg>
                  </div>
                Apps
              </a>
              <div data-state="closed">
                <button type="button" aria-controls="radix-:r9j:" aria-expanded="false" data-state="closed" class="inline-flex items-center whitespace-nowrap font-medium transition-colors 
                  focus-visible:outline-none  focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs group h-12 w-full justify-start rounded-none px-6">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                      class="tabler-icon tabler-icon-user-shield ">
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h2"></path>
                      <path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z"></path>
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                    </svg>
                  </div>
                  Authentication
                  <span class="ml-auto transition-all group-data-[state=&quot;open&quot;]:-rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" 
                      class="tabler-icon tabler-icon-chevron-down ">
                      <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                  </span>
                </button>
              </div>
              <a class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring 
                disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/users">
                <div class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                    class="tabler-icon tabler-icon-users ">
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                  </svg>
                </div>
                Users
              </a>
              <div data-state="closed"><button type="button" aria-controls="radix-:r9l:" aria-expanded="false" data-state="closed" class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs group h-12 w-full justify-start rounded-none px-6"><div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-route-alt-left "><path d="M8 3h-5v5"></path><path d="M16 3h5v5"></path><path d="M3 3l7.536 7.536a5 5 0 0 1 1.464 3.534v6.93"></path><path d="M18 6.01v-.01"></path><path d="M16 8.02v-.01"></path><path d="M14 10v.01"></path></svg></div>Requests<div class="ml-2 rounded-lg bg-primary px-1 text-[0.625rem] text-primary-foreground">10</div><span class="ml-auto transition-all group-data-[state=&quot;open&quot;]:-rotate-180"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chevron-down "><path d="M6 9l6 6l6 -6"></path></svg></span></button></div><a class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/analysis"><div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chart-histogram "><path d="M3 3v18h18"></path><path d="M20 18v3"></path><path d="M16 16v5"></path><path d="M12 13v8"></path><path d="M8 16v5"></path><path d="M3 11c6 0 5 -5 9 -5s3 5 9 5"></path></svg></div>Analysis</a><a class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/extra-components"><div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-components "><path d="M3 12l3 3l3 -3l-3 -3z"></path><path d="M15 12l3 3l3 -3l-3 -3z"></path><path d="M9 6l3 3l3 -3l-3 -3z"></path><path d="M9 18l3 3l3 -3l-3 -3z"></path></svg></div>Extra Components</a><div data-state="closed"><button type="button" aria-controls="radix-:r9n:" aria-expanded="false" data-state="closed" class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs group h-12 w-full justify-start rounded-none px-6"><div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-exclamation-circle "><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M12 9v4"></path><path d="M12 16v.01"></path></svg></div>Error Pages<span class="ml-auto transition-all group-data-[state=&quot;open&quot;]:-rotate-180"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chevron-down "><path d="M6 9l6 6l6 -6"></path></svg></span></button></div><a class="inline-flex items-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground text-xs h-12 justify-start text-wrap rounded-none px-6" href="/settings"><div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-settings "><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path></svg></div>Settings</a></nav></div><button class="items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-9 w-9 absolute -right-5 top-1/2 z-50 hidden rounded-full md:inline-flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chevrons-left h-5 w-5 "><path d="M11 7l-5 5l5 5"></path><path d="M17 7l-5 5l5 5"></path></svg></button></div>
</aside>