# Multi-Tenant CRM (AppSec-Focused)

This project is a server-authenticated, multi-tenant CRM built with
Laravel, Inertia, and Svelte. The primary goal is to demonstrate
application security practices in real-world business software.

## Security Goals
- Prevent tenant data leakage (IDOR)
- Enforce object-level authorization
- Protect authentication and session integrity
- Reduce abuse via rate limiting and audit logging

## Threat Model (High-Level)
| Threat | Risk | Mitigation |
|------|------|------------|
| IDOR | Cross-tenant data access | Tenant-scoped queries + policies |
| Privilege escalation | Role abuse | Policy-based authorization |
| CSRF | Session hijacking | CSRF tokens on all state-changing routes |
| Enumeration | Data scraping | Rate limiting + pagination |
| Data exfiltration | Bulk exports | Authorization + audit logs |

## Auth Model
- Session-based authentication
- Role-based access per organization
- Server-side enforcement only

## Authorization Strategy
- Laravel policies per model
- No role checks in controllers or frontend
- All queries scoped to authenticated tenant

## Testing
- Feature tests for authorization boundaries
- Negative tests for cross-tenant access