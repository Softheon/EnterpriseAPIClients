// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// Model for PUT Queue parameters.
    /// </summary>
    public partial class QueueBase
    {
        /// <summary>
        /// Initializes a new instance of the QueueBase class.
        /// </summary>
        public QueueBase()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the QueueBase class.
        /// </summary>
        /// <param name="name">Gets or sets the name.</param>
        /// <param name="alias">Gets or sets the alias.</param>
        /// <param name="state">Gets or sets the state. Possible values
        /// include: 'Inactive', 'Active'</param>
        /// <param name="type">Gets or sets the type. Possible values include:
        /// 'Inbound', 'Outbound', 'Access', 'Any', 'Shared', 'Public',
        /// 'Recycle', 'Fax', 'Print', 'Scan', 'Ocr', 'Workflow', 'Schedule',
        /// 'System', 'Other', 'CdoInfostore', 'CdoFolder'</param>
        /// <param name="category">Gets or sets the category.</param>
        /// <param name="description">Gets or sets the description.</param>
        /// <param name="reservedInt1">Gets or sets the reserved integer
        /// 1.</param>
        /// <param name="reservedInt2">Gets or sets the reserved integer
        /// 2.</param>
        /// <param name="reservedString1">Gets or sets the reserved string
        /// 1.</param>
        /// <param name="reservedString2">Gets or sets the reserved string
        /// 2.</param>
        public QueueBase(string name = default(string), string alias = default(string), string state = default(string), string type = default(string), string category = default(string), string description = default(string), int? reservedInt1 = default(int?), int? reservedInt2 = default(int?), string reservedString1 = default(string), string reservedString2 = default(string))
        {
            Name = name;
            Alias = alias;
            State = state;
            Type = type;
            Category = category;
            Description = description;
            ReservedInt1 = reservedInt1;
            ReservedInt2 = reservedInt2;
            ReservedString1 = reservedString1;
            ReservedString2 = reservedString2;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "Name")]
        public string Name { get; set; }

        /// <summary>
        /// Gets or sets the alias.
        /// </summary>
        [JsonProperty(PropertyName = "Alias")]
        public string Alias { get; set; }

        /// <summary>
        /// Gets or sets the state. Possible values include: 'Inactive',
        /// 'Active'
        /// </summary>
        [JsonProperty(PropertyName = "State")]
        public string State { get; set; }

        /// <summary>
        /// Gets or sets the type. Possible values include: 'Inbound',
        /// 'Outbound', 'Access', 'Any', 'Shared', 'Public', 'Recycle', 'Fax',
        /// 'Print', 'Scan', 'Ocr', 'Workflow', 'Schedule', 'System', 'Other',
        /// 'CdoInfostore', 'CdoFolder'
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public string Type { get; set; }

        /// <summary>
        /// Gets or sets the category.
        /// </summary>
        [JsonProperty(PropertyName = "Category")]
        public string Category { get; set; }

        /// <summary>
        /// Gets or sets the description.
        /// </summary>
        [JsonProperty(PropertyName = "Description")]
        public string Description { get; set; }

        /// <summary>
        /// Gets or sets the reserved integer 1.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedInt1")]
        public int? ReservedInt1 { get; set; }

        /// <summary>
        /// Gets or sets the reserved integer 2.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedInt2")]
        public int? ReservedInt2 { get; set; }

        /// <summary>
        /// Gets or sets the reserved string 1.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedString1")]
        public string ReservedString1 { get; set; }

        /// <summary>
        /// Gets or sets the reserved string 2.
        /// </summary>
        [JsonProperty(PropertyName = "ReservedString2")]
        public string ReservedString2 { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (Name != null)
            {
                if (Name.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Name", 255);
                }
                if (Name.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Name", 0);
                }
            }
            if (Alias != null)
            {
                if (Alias.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Alias", 255);
                }
                if (Alias.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Alias", 0);
                }
            }
            if (Category != null)
            {
                if (Category.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Category", 255);
                }
                if (Category.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Category", 0);
                }
            }
            if (Description != null)
            {
                if (Description.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Description", 255);
                }
                if (Description.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Description", 0);
                }
            }
            if (ReservedString1 != null)
            {
                if (ReservedString1.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "ReservedString1", 255);
                }
                if (ReservedString1.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "ReservedString1", 0);
                }
            }
            if (ReservedString2 != null)
            {
                if (ReservedString2.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "ReservedString2", 255);
                }
                if (ReservedString2.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "ReservedString2", 0);
                }
            }
        }
    }
}