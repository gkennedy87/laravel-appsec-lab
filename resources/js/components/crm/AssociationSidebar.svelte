<script>
  import { Building2, Briefcase, Plus } from "@lucide/svelte";
  // Assuming you have a UI library for ScrollArea, Card, Badge, and Button
  // If not, these can be replaced with standard HTML/Tailwind divs
  
  /** * MOCK DATA
   * Easily removable or replaceable with exported props
   */
  let mockAssociations = {
    company: {
      name: "Globex Corp",
      domain: "globex.com",
      id: "comp-1"
    },
    deals: [
      { id: "deal-1", name: "Q3 Enterprise Software", amount: "$45,000", stage: "Proposal" },
      { id: "deal-2", name: "Custom Integration", amount: "$12,500", stage: "Meeting" }
    ]
  };

  // Helper for formatting
  export let dealsCount = mockAssociations.deals.length;
</script>

<aside class="w-80 border-l bg-sidebar-background flex flex-col h-full overflow-hidden">
  <div class="flex-1 overflow-y-auto custom-scrollbar">
    <div class="p-6 space-y-8">
      
      <section class="space-y-4">
        <div class="flex items-center justify-between">
          <h3 class="text-xs font-bold uppercase tracking-widest text-muted-foreground">Company</h3>
          <button class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors hover:bg-muted h-6 w-6">
            <Plus size={14} />
          </button>
        </div>

        <div class="rounded-xl border border-border/60 bg-card p-3 flex items-center gap-3 shadow-sm hover:bg-muted/10 cursor-pointer transition-colors">
          <div class="w-10 h-10 rounded-md bg-primary/5 flex items-center justify-center text-primary">
            <Building2 size={20} />
          </div>
          <div>
            <p class="text-sm font-bold leading-none">{mockAssociations.company.name}</p>
            <p class="text-[11px] text-muted-foreground mt-1">{mockAssociations.company.domain}</p>
          </div>
        </div>
      </section>

      <section class="space-y-4">
        <div class="flex items-center justify-between">
          <h3 class="text-xs font-bold uppercase tracking-widest text-muted-foreground">
            Deals ({dealsCount})
          </h3>
          <button class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors hover:bg-muted h-6 w-6">
            <Plus size={14} />
          </button>
        </div>

        {#each mockAssociations.deals as deal (deal.id)}
          <div class="rounded-xl border border-border/60 bg-card p-3 shadow-sm hover:bg-muted/10 cursor-pointer transition-colors">
            <div class="flex items-center gap-3 mb-2">
              <div class="w-8 h-8 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600">
                <Briefcase size={16} />
              </div>
              <p class="text-sm font-bold leading-none">{deal.name}</p>
            </div>
            <div class="flex justify-between items-center text-[11px] ml-11">
              <span class="font-bold">{deal.amount}</span>
              <span class="whitespace-nowrap inline-flex items-center rounded-md border border-transparent bg-primary/10 px-1.5 py-0.5 text-[10px] font-bold text-primary">
                {deal.stage}
              </span>
            </div>
          </div>
        {/each}
      </section>

    </div>
  </div>
</aside>

<style>
  /* Optional: Custom scrollbar styling to match HubSpot's subtle look */
  .custom-scrollbar::-webkit-scrollbar {
    width: 4px;
  }
  .custom-scrollbar::-webkit-scrollbar-thumb {
    background: transparent;
    border-radius: 10px;
  }
  .custom-scrollbar:hover::-webkit-scrollbar-thumb {
    background: rgba(0,0,0,0.1);
  }
</style>