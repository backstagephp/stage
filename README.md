# Backstage

Welcome on stage.

This is the template repository for installing new websites with [Backstage](https://github.com/backstagephp/cms).

```
composer create-project backstage/stage
```

Or use the [backstage installer](https://github.com/backstagephp/installer).

## Authentication

Backstage's `User` model is loaded by default — `config/auth.php` reads
the model from the `AUTH_MODEL` env var, which the installer sets to
`\Backstage\Models\User` automatically. You don't need to create
`app/Models/User.php` for typical projects.

If you do create your own User class to add project-specific fields
or behaviour, extend `\Backstage\Models\User` and **don't** add
`protected $guarded = [];` — the parent class declares an explicit
`$fillable` whitelist, and an empty `$guarded` overrides it and
reintroduces mass-assignment risk.