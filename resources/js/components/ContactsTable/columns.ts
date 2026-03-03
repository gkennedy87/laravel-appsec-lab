import type { ColumnDef } from "@tanstack/table-core";
import type {Contact} from "@/types/models"

export const columns: ColumnDef<Contact>[] = [
    {
    accessorKey: "first_name",
    header: "First Name",
  },
  {
    accessorKey: "last_name",
    header: "Last Name",
  },
  {
    accessorKey: "title",
    header: "Title",
  },
  {
    accessorKey: "email",
    header: "Email"
  },
  {
    accessorKey: "phone",
    header: "Phone"
  },
  {
    accessorKey: "last_contacted",
    header: "Last Contact"
  },
  {
    accessorKey: "organization_id",
    header: "Company"
  },
]
