<script lang="ts">
    import AppHead from '@/components/AppHead.svelte';
    import PlaceholderPattern from '@/components/PlaceholderPattern.svelte';
    import AppLayout from '@/layouts/AppLayout.svelte';
    import type { BreadcrumbItem } from '@/types';
    import { index } from '@/routes/contacts';
    import DashboardHead from '@/components/DashboardHead.svelte';
    import { Download, Plus } from '@lucide/svelte';
    import type {Contact} from "@/types/models";
    import DataTable from "@/components/ContactsTable/DataTable.svelte";
    import { columns } from "@/components/ContactsTable/columns";

    const breadcrumbs: BreadcrumbItem[] = [
        {
            title: 'Contacts',
            href: index(),
        },
    ];

    const title = "Contacts";
    const description = "Manage your relationships and track interactions";
    let { contacts }:{ contacts:Contact[]} = $props();

    const headerActions = {
        primary: {
            text: 'Create Contact',
            icon: Plus,
            handler: () => { console.log("clicked") }
        },
        secondary: {
            text: 'Export',
            icon: Download,
            handler: () => {console.log("clicked")}
        }
    }

</script>

<AppHead title="Contacts" />

<AppLayout {breadcrumbs}>
    <div
        class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-6 lg:p-8"
    >
        <DashboardHead title={title} description={description} actions={headerActions}/>
        
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative md:col-span-3 aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
            >
                <DataTable data={contacts} {columns} />
            </div>
            
        </div>
        <div
            class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
        >
            <PlaceholderPattern />
        </div>
    </div>
</AppLayout>



