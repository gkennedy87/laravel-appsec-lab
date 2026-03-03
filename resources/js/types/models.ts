export interface Contact {
    id: number;
    first_name: string;
    last_name: string;
    title: string;
    email: string;
    phone: string;
    last_contacted: string; // Dates from Laravel arrive as strings
    organization_id: number;
    created_at: string;
    updated_at: string;
}