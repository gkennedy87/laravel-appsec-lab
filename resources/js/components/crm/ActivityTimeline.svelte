<script>
  import { Mail, Phone, History, Send } from "@lucide/svelte";
  
  /** * DATA OBJECTS
   * Easily removable or replaceable with API data
   */
  let activeTab = 'note';
  let noteText = "";

  const tabs = [
    { id: 'note', label: 'Note' },
    { id: 'email', label: 'Email' },
    { id: 'call', label: 'Call' },
    { id: 'task', label: 'Task' }
  ];

  const activities = [
    {
      id: 1,
      type: 'email',
      title: 'Re: Q3 Enterprise Contract Discussion',
      timestamp: 'Today, 10:45 AM',
      preview: "Hi Jane, I've reviewed the proposal you sent over. The terms look mostly good but...",
      icon: Mail,
      iconClass: 'bg-blue-100 text-blue-600'
    },
    {
      id: 2,
      type: 'call',
      title: 'Connected with Olivia Martin',
      timestamp: 'Yesterday, 2:30 PM',
      meta: 'Duration: 12m 45s • Outcome: Connected',
      icon: Phone,
      iconClass: 'bg-emerald-100 text-emerald-600'
    },
    {
      id: 3,
      type: 'system',
      title: 'Lifecycle Stage changed to Marketing Qualified Lead',
      timestamp: 'Yesterday, 9:00 AM',
      icon: History,
      iconClass: 'bg-slate-100 text-slate-600'
    }
  ];

  function saveNote() {
    console.log("Saving note:", noteText);
    noteText = "";
  }
</script>

<main class="flex-1 flex flex-col min-w-0 bg-[#f0f2f5] h-full overflow-hidden">
  <div class="flex-1 overflow-y-auto custom-scrollbar">
    <div class="max-w-3xl mx-auto p-8 space-y-6">
      
      <div class="rounded-xl border bg-card text-card-foreground shadow-sm border-border/60 overflow-hidden">
        <div class="flex items-center p-1 text-muted-foreground w-full justify-start border-b h-12 px-4 gap-6">
          {#each tabs as tab}
            <button 
              class="h-12 text-xs font-bold uppercase tracking-wider transition-all border-b-2 {activeTab === tab.id ? 'text-foreground border-primary' : 'border-transparent text-muted-foreground hover:text-foreground'}"
              on:click={() => activeTab = tab.id}
            >
              {tab.label}
            </button>
          {/each}
        </div>

        <div class="p-4 bg-white">
          {#if activeTab === 'note'}
            <textarea 
              bind:value={noteText}
              placeholder="Start typing to leave a note..." 
              class="w-full min-h-[100px] bg-transparent border-none focus:ring-0 text-sm resize-none outline-none"
            ></textarea>
          {:else}
            <div class="flex items-center justify-center min-h-[100px] text-sm text-muted-foreground italic">
              {activeTab.charAt(0).toUpperCase() + activeTab.slice(1)} composer interface would go here.
            </div>
          {/if}
          
          <div class="flex justify-end pt-2 border-t mt-2">
            <button 
              on:click={saveNote}
              class="inline-flex items-center justify-center gap-2 rounded-md bg-primary text-primary-foreground px-3 py-1.5 text-xs font-bold hover:opacity-90 transition-opacity"
            >
              Save {activeTab}
            </button>
          </div>
        </div>
      </div>

      <div class="space-y-4">
        <div class="flex items-center gap-2 text-xs font-bold text-muted-foreground uppercase tracking-widest px-1">
          <History size={14} /> Activity Feed
        </div>

        {#each activities as activity (activity.id)}
          <div class="rounded-xl border bg-card text-card-foreground shadow-sm border-border/60 hover:border-primary/30 transition-colors">
            <div class="p-4">
              <div class="flex gap-4">
                <div class="mt-1">
                  <div class="p-2 rounded-full {activity.iconClass}">
                    <svelte:component this={activity.icon} size={16} />
                  </div>
                </div>

                <div class="flex-1 space-y-1">
                  <div class="flex justify-between items-start">
                    <h4 class="text-sm font-bold leading-tight">{activity.title}</h4>
                    <span class="text-[11px] text-muted-foreground">{activity.timestamp}</span>
                  </div>
                  
                  {#if activity.preview}
                    <p class="text-sm text-muted-foreground line-clamp-2">{activity.preview}</p>
                  {/if}

                  {#if activity.meta}
                    <p class="text-xs font-medium text-emerald-600">{activity.meta}</p>
                  {/if}

                  <div class="flex items-center gap-2 pt-2">
                    <button class="text-xs font-bold text-primary hover:bg-primary/5 px-2 py-1 rounded transition-colors">View details</button>
                    <div class="w-[1px] h-3 bg-border"></div>
                    <button class="text-xs font-bold text-muted-foreground hover:bg-muted px-2 py-1 rounded transition-colors">Add comment</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {/each}
      </div>

    </div>
  </div>
</main>

<style>
  .custom-scrollbar::-webkit-scrollbar {
    width: 6px;
  }
  .custom-scrollbar::-webkit-scrollbar-thumb {
    background: #d1d5db;
    border-radius: 10px;
  }
  .custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
  }
</style>