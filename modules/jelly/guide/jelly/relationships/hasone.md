#### `Jelly_Field_HasOne` (1:1)

This is exactly the same as `Jelly_Field_HasMany` with the exception that Jelly ensures that the model can only *have* one other model, instead of many.

	// In Model_Author::initialize()
	'posts' => Jelly::field('hasone', array(
		'foreign' => 'post.author:foreign_key',
	)),

**Properties**

**`foreign`** — The model that this field has many of. You can also pass a field to use as the foreign model's foreign key.

	// The default, using the above example
	'foreign' => 'post.author:foreign_key',

**`convert_empty`** — This defaults to TRUE, unlike most other fields. Empty values are converted to the value set for `empty_value`, which defaults to `0`.

**`empty_value`** — This is the default value that empty values are converted to. The default is `array()`.

**Using this relationship**

	$author = Jelly::query('author', 1)->select();

	// Access the post's name
	$author->post->name;

	// Retrieve the post only if it's published
	$author->get('post')->where('status', '=', 'published')->select();

	// Delete the post
	$author->get('post')->delete();

	// Remove the relationship
	$author->post = NULL;
	$author->save();