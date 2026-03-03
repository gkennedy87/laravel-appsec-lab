<script lang='ts'>
    import RecordLayout from "@/layouts/RecordLayout.svelte";

    import type { Contact } from "@/types/models";

    // Receive the data from the Controller
    let { contact }: { contact: Contact } = $props();
</script>

<RecordLayout {contact}/>