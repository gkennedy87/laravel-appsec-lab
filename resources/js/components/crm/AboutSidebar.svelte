<script>
  import { 
    FileText, 
    Mail, 
    Phone, 
    CircleCheck, 
    Calendar, 
    Pen 
  } from "@lucide/svelte";

  /**
   * DATA OBJECTS
   * Easily removable or replaceable with props for real CRM data
   */
  let contactDetails = [
    { label: "Contact owner", value: "Jane Doe" },
    { label: "Email", value: "olivia.martin@email.com" },
    { label: "Phone number", value: "+1 (555) 000-0000" },
    { label: "Lifecycle stage", value: "Marketing Qualified Lead" },
    { label: "Lead status", value: "In Progress" }
  ];

  const quickActions = [
    { icon: FileText, label: "Note" },
    { icon: Mail, label: "Email" },
    { icon: Phone, label: "Call" },
    { icon: CircleCheck, label: "Task" },
    { icon: Calendar, label: "Meet" }
  ];
</script>

<aside class="w-80 border-r flex flex-col h-full text-card-foreground/90 bg-card">
  <div class="p-6 space-y-6">
    
    <div class="flex justify-between items-center p-2 rounded-lg border border-border/50">
      {#each quickActions as action}
        <button 
          class="inline-flex items-center justify-center h-9 w-9 rounded-md transition-all hover:bg-background hover:shadow-sm hover:text-primary group"
          title={action.label}
        >
          <svelte:component this={action.icon} size={18} strokeWidth={2} />
        </button>
      {/each}
    </div>

    <div class="space-y-4">
      <h3 class="text-sm font-bold flex items-center justify-between">
        About this contact
        <button class="inline-flex items-center justify-center h-6 w-6 rounded-md hover:bg-muted transition-colors">
          <Pen size={12} />
        </button>
      </h3>

      <div class="space-y-3">
        {#each contactDetails as field}
          <div class="group relative py-1">
            <p class="text-[11px] font-semibold text-muted-foreground uppercase tracking-tight">
              {field.label}
            </p>
            <div class="flex items-center justify-between mt-0.5">
              <p class="text-sm font-medium">{field.value}</p>
              
              <button class="opacity-0 group-hover:opacity-100 text-primary transition-opacity duration-200">
                <Pen size={12} />
              </button>
            </div>
          </div>
        {/each}
      </div>
    </div>

  </div>
</aside>

<style>
  /* Ensuring smooth transitions for the HubSpot-style hover effects */
  button {
    cursor: pointer;
  }
</style>