---
title: "Referencing Values in Arrays"
file: "step2.php"
objective: "Using the current array, change the value of `test2` to `test4` using numeric indexes and append a new value of \"pineapple\" to the array"
---

Now that we've seen an example of how to set values into an array, let's look at the other side: getting those values back out. While there are [built-in functions](http://php.net/manual/en/ref.array.php) that can help with it, there's a much simpler way to reference values in an array. 

Let's start with a simple array of strings:
```
$array = ['test1', 'test2'];
```
In this example, we've created a simple array `$array` and filled it with strings. The values in this simple array can be referenced by their location in the array, their "index". For a simple array like this, they're just numbers. So, to print out the first value in the array, we could use:

```
echo $array[0];
```

Array indexes in simple PHP arrays start at `0` so to get the first value, we use `0` as the index. It then progresses up from there. This same index is also useful for setting values. Say we wanted to add a new value to the array in a certain place. We could use the index along with the array variable to set a new value:

```
$array[2] = 'test3';
// The array then becomes ['test1', 'test2', 'test3']
```

Or, if we simply want to append it to the end of the array, we can use the empty `[` and `]` instead:

```
$array[] = 'test3';
```