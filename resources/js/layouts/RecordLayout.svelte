<script lang="ts">
    import AppHead from "@/components/AppHead.svelte";
    import AppLayout from "@/layouts/AppLayout.svelte";
    
    // Import the refactored components
    import RecordHeader from "@/components/crm/RecordHeader.svelte";
    import LeftSidebar from "@/components/crm/AboutSidebar.svelte";
    import ActivityTimeline from "@/components/crm/ActivityTimeline.svelte";
    import RightSidebar from "@/components/crm/AssociationSidebar.svelte";
    import type { BreadcrumbItem } from '@/types';
    import {  } from '@/routes'; // Adjust this to your actual route helper import
    import type { Contact } from "@/types/models";

    // Accept the contact prop
    let { contact }: { contact: Contact } = $props();
    const name = `${contact.first_name} ${contact.last_name}`;

    const breadcrumbs: BreadcrumbItem[] = [
        { title: 'Contacts', href: '/contacts' },
        { title: name, href: `/contacts/${contact.id}` }
    ]
</script>

<AppHead title="Olivia Martin | CRM" />

<AppLayout {breadcrumbs}>
    <div class="flex flex-col h-full overflow-hidden">
        
        <RecordHeader 
            {contact}
            {breadcrumbs} 
        />

        <div class="flex flex-1 overflow-hidden">
            
            <LeftSidebar />

            <ActivityTimeline />

            <RightSidebar />

        </div>
    </div>
</AppLayout>
