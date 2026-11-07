# hkm-plugin-school-portal

> Solves **`school.portal`** · namespace **`Plugins\SchoolPortal\`** · on-demand GDA module
> Family: Elimu / school domain

The parent and pupil space: profile, bulletins, receipts, payment methods and delay requests.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolPortalContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `student/ — profile.php, student_bulletin.php, student_receipts.php, payment_methods.php, requests/` |
| Legacy tables | `(no tables of its own — reads across fees, bulletin, attendance)` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.portal"] }
```

```php
$svc = $container->make(\Plugins\SchoolPortal\API\Contracts\SchoolPortalContract::class);
```

## Installing

```bash
hkm plugins enable SchoolPortal <project>
```
