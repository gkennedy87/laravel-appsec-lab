<script>

export const filterIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-funnel h-4 w-4" aria-hidden="true" >
                <path d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z"></path>
            </svg> `

let { 
        title = "Sales Dashboard", 
        description = "", 
        actions = {} 
} = $props();
const { primary, secondary } = actions;

</script>

<div id="dashboard-header" class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
    <div>
        <h1 class="text-2xl font-semibold tracking-tight text-foreground">
            {title}
        </h1>
        <p class="text-sm text-muted-foreground">
            {description}
        </p>
    </div>
    <div class="flex gap-2">
         {#if actions.secondary}
            <button onclick={actions.secondary.handler} class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 border [border-color:var(--button-outline)] shadow-xs active:shadow-none min-h-9 px-4 py-2 gap-2">
                {#if actions.secondary.icon}
                    <actions.primary.icon 
                        size={16} 
                        strokeWidth={2.25} 
                        class="opacity-90" 
                    />
                {/if}
                {actions.secondary.text}
            </button>
        {/if}
        
        {#if actions.primary}
            <button onclick={actions.primary.handler} class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 bg-primary text-primary-foreground border border-primary-border min-h-9 px-4 py-2 gap-2">
                {#if actions.primary.icon}
                    <actions.primary.icon 
                        size={16} 
                        strokeWidth={2.25} 
                        class="opacity-90" 
                    />
                {/if}
                {actions.primary.text}
            </button>
        {/if}
    </div>
</div>