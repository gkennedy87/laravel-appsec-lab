<script lang="ts">
    import { X, Mail, Phone, History, FileText, ChevronRight } from '@lucide/svelte';
    
    let { contact, onChatClose } = $props();
</script>

<div class="flex flex-col border-b">
    <div class="flex justify-end p-2">
        <button 
            onclick={onChatClose}
            class="p-1 rounded-md hover:bg-muted text-muted-foreground transition-colors"
        >
            <X size={20} />
        </button>
    </div>

    <div class="px-6 pb-6 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <div class="h-12 w-12 rounded-full bg-orange-100 text-orange-700 flex items-center justify-center font-bold text-lg">
                {contact.initials}
            </div>
            <div>
                <h2 class="text-xl font-bold tracking-tight flex items-center gap-1">
                    {contact.name}
                </h2>
                <p class="text-sm text-muted-foreground">{contact.company}</p>
            </div>
        </div>
        <ChevronRight size={18} class="text-muted-foreground" />
    </div>

    <div class="grid grid-cols-4 border-t py-3">
        <button class="flex justify-center text-muted-foreground hover:text-primary border-r">
            <FileText size={18} />
        </button>
        <button class="flex justify-center text-muted-foreground hover:text-primary border-r">
            <Mail size={18} />
        </button>
        <button class="flex justify-center text-muted-foreground hover:text-primary border-r">
            <Phone size={18} />
        </button>
        <button class="flex justify-center text-muted-foreground hover:text-primary">
            <History size={18} />
        </button>
    </div>
</div>