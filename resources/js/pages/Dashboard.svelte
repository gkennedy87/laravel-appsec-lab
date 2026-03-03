<script lang="ts">
    import AppHead from '@/components/AppHead.svelte';
    import PlaceholderPattern from '@/components/PlaceholderPattern.svelte';
    import AppLayout from '@/layouts/AppLayout.svelte';
    import Card from '@/components/ui/card/Card.svelte';
    import CardHeader from '@/components/ui/card/CardHeader.svelte';
    import CardDescription from '@/components/ui/card/CardDescription.svelte';
    import CardTitle from '@/components/ui/card/CardTitle.svelte';
    import CardContent from '@/components/ui/card/CardContent.svelte';
    import type { BreadcrumbItem } from '@/types';
    import { dashboard } from '@/routes';
    import DashboardHead from '@/components/DashboardHead.svelte';
    import { Funnel, Plus } from '@lucide/svelte';

    const breadcrumbs: BreadcrumbItem[] = [
        {
            title: 'Dashboard',
            href: dashboard(),
        },
    ];

    let { 
        title = "Sales Dashboard", 
        description = "Welcome back, here's what's happening today.", 
        actions = {} 
    } = $props();

    const headerActions = {
        primary: {
            text: 'Create Deal',
            icon: Plus,
            handler: () => { console.log("clicked") }
        },
        secondary: {
            text: 'Filter',
            icon: Funnel,
            handler: () => {console.log("clicked")}
        }
    }

</script>

<AppHead title="Dashboard" />

<AppLayout {breadcrumbs}>
    <div
        class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-6 lg:p-8"
    >
        <DashboardHead title={title} description={description} actions={headerActions}/>
        <div class="grid auto-rows-min gap-4 md:grid-cols-2 lg:grid-cols-4 mb-8">
            
                <Card class="rounded-xl border bg-card text-card-foreground shadow">
                    <CardHeader class='p-6 flex flex-row items-center justify-between pb-2 space-y-0'>
                        <CardTitle class="tracking-tight text-sm font-medium text-muted-foreground">Total Revenue</CardTitle>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-4 w-4 text-muted-foreground" aria-hidden="true" data-replit-metadata="client/src/pages/dashboard.tsx:76:18" data-component-name="DollarSign"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </CardHeader>
                    <CardContent class="p-6 pt-0">
                        <div class="text-2xl font-bold">$54,321</div>
                        <p class="text-xs text-emerald-500 flex items-center gap-1 mt-1">+32% from last month</p>
                    </CardContent> 
                </Card>

                <Card class="rounded-xl border bg-card text-card-foreground shadow">
                    <CardHeader class='p-6 flex flex-row items-center justify-between pb-2 space-y-0'>
                        <CardTitle class="tracking-tight text-sm font-medium text-muted-foreground">Active Deals</CardTitle>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase h-4 w-4 text-muted-foreground" aria-hidden="true" data-replit-metadata="client/src/pages/dashboard.tsx:89:18" data-component-name="Briefcase"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path><rect width="20" height="14" x="2" y="6" rx="2"></rect></svg>
                    </CardHeader>
                    <CardContent class="p-6 pt-0">
                        <div class="text-2xl font-bold">142</div>
                        <p class="text-xs text-emerald-500 flex items-center gap-1 mt-1">+32% from last month</p>
                    </CardContent> 
                </Card>
                <Card class="rounded-xl border bg-card text-card-foreground shadow">
                    <CardHeader class='p-6 flex flex-row items-center justify-between pb-2 space-y-0'>
                        <CardTitle class="tracking-tight text-sm font-medium text-muted-foreground">Win Rate</CardTitle>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-4 w-4 text-muted-foreground" aria-hidden="true" data-component-name="Target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                    </CardHeader>
                    <CardContent class="p-6 pt-0">
                        <div class="text-2xl font-bold">34.5%</div>
                        <p class="text-xs text-red-500 flex items-center gap-1 mt-1">-4% from last month</p>
                    </CardContent> 
                </Card>
                <Card class="rounded-xl border bg-card text-card-foreground shadow">
                    <CardHeader class='p-6 flex flex-row items-center justify-between pb-2 space-y-0'>
                        <CardTitle class="tracking-tight text-sm font-medium text-muted-foreground">New Contacts</CardTitle>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4 text-muted-foreground" aria-hidden="true" data-replit-metadata="client/src/pages/dashboard.tsx:115:18" data-component-name="Users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>
                    </CardHeader>
                    <CardContent class="p-6 pt-0">
                        <div class="text-2xl font-bold">+573</div>
                        <p class="text-xs text-emerald-500 flex items-center gap-1 mt-1">+201 since last week</p>
                    </CardContent> 
                </Card>
        </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative md:col-span-2 aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
            >
                <Card class="h-full">
                    <CardHeader class='p-6 flex flex-row items-center justify-between pb-2 space-y-0'>
                        <CardTitle class="tracking-tight text-sm font-medium text-muted-foreground">Total Revenue</CardTitle>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-4 w-4 text-muted-foreground" aria-hidden="true" data-replit-metadata="client/src/pages/dashboard.tsx:76:18" data-component-name="DollarSign"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </CardHeader>
                    <CardContent class="p-6 pt-0">
                        <div class="text-2xl font-bold">$54,321</div>
                        <p class="text-xs text-emerald-500 flex items-center gap-1 mt-1">+32% from last month</p>
                    </CardContent> 
                </Card>
            </div>
            <div
                class="relative md:col-span-1 aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
            >
                <PlaceholderPattern />
            </div>
        </div>
        <div
            class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
        >
            <PlaceholderPattern />
        </div>
    </div>
</AppLayout>
