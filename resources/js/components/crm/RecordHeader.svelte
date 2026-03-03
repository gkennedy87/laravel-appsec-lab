<script lang='ts'>
  import { ChevronRight, CircleCheck } from "@lucide/svelte";

  // Data objects for easy removal/updates

  // Accept the contact prop
  let { contact, breadcrumbs } = $props();

  const recordName = contact.first_name+" "+contact.last_name;
  
  const previousCrumb = $derived(breadcrumbs?.at(-2));



  const stats = [
    { label: "Lead Status", value: "In Progress" },
    { label: "Lifecycle Stage", value: "Marketing Qualified Lead" }
  ];

  // Pipeline/Chevron Stages
  const stages = ["New", "Qualifying", "Meeting", "Proposal", "Closing"];
  let currentStageIndex = 2; // "Meeting" is active
</script>

<header class="border-b px-8 py-4 flex items-center justify-between">
  <div class="space-y-1">
    <nav class="flex items-center text-xs text-muted-foreground gap-1">
      <a href={previousCrumb.href} class="hover:text-primary transition-colors">{previousCrumb.title}</a>
      <ChevronRight size={12} />
      <span>{recordName}</span>
    </nav>

    <div class="flex items-center gap-4">
      <h1 class="text-2xl font-bold tracking-tight">{recordName}</h1>
      
      <div class="flex gap-6 border-l pl-6">
        {#each stats as stat}
          <div>
            <p class="text-[10px] uppercase font-bold text-muted-foreground tracking-wider">
              {stat.label}
            </p>
            <p class="text-sm font-semibold">{stat.value}</p>
          </div>
        {/each}
      </div>
    </div>
  </div>

  <div class="flex items-center">
    {#each stages as stage, i}
      <div class="flex items-center">
        <div 
          class="h-8 px-4 flex items-center text-xs font-bold relative transition-all duration-200
          {i < currentStageIndex ? 'bg-primary/10 text-primary' : ''}
          {i === currentStageIndex ? 'bg-primary text-primary-foreground shadow-lg z-10 scale-105' : ''}
          {i > currentStageIndex ? 'bg-muted/50 text-muted-foreground' : ''}
          {i === 0 ? 'rounded-l-md' : ''}
          {i === stages.length - 1 ? 'rounded-r-md' : ''}"
        >
          {#if i < currentStageIndex}
            <CircleCheck size={12} class="mr-2" />
          {/if}
          {stage}
        </div>

        {#if i < stages.length - 1}
          <div class="w-4 h-8 bg-muted/20 skew-x-[20deg] -ml-2 z-0"></div>
        {/if}
      </div>
    {/each}
  </div>
</header>

<style>
  /* Optional: ensure the skew doesn't create unwanted horizontal scroll */
  header {
    white-space: nowrap;
  }
</style>